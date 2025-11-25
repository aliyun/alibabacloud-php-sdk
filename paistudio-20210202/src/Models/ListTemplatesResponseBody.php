<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData;

class ListTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateData[]
     */
    public $templateData;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateData' => 'TemplateData',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->templateData)) {
            Model::validateArray($this->templateData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateData) {
            if (\is_array($this->templateData)) {
                $res['TemplateData'] = [];
                $n1 = 0;
                foreach ($this->templateData as $item1) {
                    $res['TemplateData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateData'])) {
            if (!empty($map['TemplateData'])) {
                $model->templateData = [];
                $n1 = 0;
                foreach ($map['TemplateData'] as $item1) {
                    $model->templateData[$n1] = templateData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
