<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\properties;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\properties\sourceLogos\sourceLogo;

class sourceLogos extends Model
{
    /**
     * @var sourceLogo[]
     */
    public $sourceLogo;
    protected $_name = [
        'sourceLogo' => 'SourceLogo',
    ];

    public function validate()
    {
        if (\is_array($this->sourceLogo)) {
            Model::validateArray($this->sourceLogo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceLogo) {
            if (\is_array($this->sourceLogo)) {
                $res['SourceLogo'] = [];
                $n1 = 0;
                foreach ($this->sourceLogo as $item1) {
                    $res['SourceLogo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SourceLogo'])) {
            if (!empty($map['SourceLogo'])) {
                $model->sourceLogo = [];
                $n1 = 0;
                foreach ($map['SourceLogo'] as $item1) {
                    $model->sourceLogo[$n1++] = sourceLogo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
