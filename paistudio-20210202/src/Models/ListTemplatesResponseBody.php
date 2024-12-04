<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData;
use AlibabaCloud\Tea\Model;

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
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'templateData' => 'TemplateData',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateData) {
            $res['TemplateData'] = [];
            if (null !== $this->templateData && \is_array($this->templateData)) {
                $n = 0;
                foreach ($this->templateData as $item) {
                    $res['TemplateData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateData'])) {
            if (!empty($map['TemplateData'])) {
                $model->templateData = [];
                $n                   = 0;
                foreach ($map['TemplateData'] as $item) {
                    $model->templateData[$n++] = null !== $item ? templateData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
