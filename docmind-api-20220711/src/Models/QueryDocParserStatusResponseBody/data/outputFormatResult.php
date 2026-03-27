<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody\data\outputFormatResult\pages;

class outputFormatResult extends Model
{
    /**
     * @var string
     */
    public $outputFileUrl;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var pages[]
     */
    public $pages;
    protected $_name = [
        'outputFileUrl' => 'OutputFileUrl',
        'outputType' => 'OutputType',
        'pages' => 'Pages',
    ];

    public function validate()
    {
        if (\is_array($this->pages)) {
            Model::validateArray($this->pages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputFileUrl) {
            $res['OutputFileUrl'] = $this->outputFileUrl;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        if (null !== $this->pages) {
            if (\is_array($this->pages)) {
                $res['Pages'] = [];
                $n1 = 0;
                foreach ($this->pages as $item1) {
                    $res['Pages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFileUrl'])) {
            $model->outputFileUrl = $map['OutputFileUrl'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        if (isset($map['Pages'])) {
            if (!empty($map['Pages'])) {
                $model->pages = [];
                $n1 = 0;
                foreach ($map['Pages'] as $item1) {
                    $model->pages[$n1] = pages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
