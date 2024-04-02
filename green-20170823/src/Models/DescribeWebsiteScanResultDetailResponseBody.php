<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultDetailResponseBody\imageScanResults;
use AlibabaCloud\Tea\Model;

class DescribeWebsiteScanResultDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $baseline;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $hitKeywords;

    /**
     * @var imageScanResults[]
     */
    public $imageScanResults;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tamperedSource;
    protected $_name = [
        'baseline'         => 'Baseline',
        'content'          => 'Content',
        'hitKeywords'      => 'HitKeywords',
        'imageScanResults' => 'ImageScanResults',
        'requestId'        => 'RequestId',
        'resourceType'     => 'ResourceType',
        'tamperedSource'   => 'TamperedSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = $this->baseline;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->hitKeywords) {
            $res['HitKeywords'] = $this->hitKeywords;
        }
        if (null !== $this->imageScanResults) {
            $res['ImageScanResults'] = [];
            if (null !== $this->imageScanResults && \is_array($this->imageScanResults)) {
                $n = 0;
                foreach ($this->imageScanResults as $item) {
                    $res['ImageScanResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tamperedSource) {
            $res['TamperedSource'] = $this->tamperedSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteScanResultDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            $model->baseline = $map['Baseline'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['HitKeywords'])) {
            if (!empty($map['HitKeywords'])) {
                $model->hitKeywords = $map['HitKeywords'];
            }
        }
        if (isset($map['ImageScanResults'])) {
            if (!empty($map['ImageScanResults'])) {
                $model->imageScanResults = [];
                $n                       = 0;
                foreach ($map['ImageScanResults'] as $item) {
                    $model->imageScanResults[$n++] = null !== $item ? imageScanResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TamperedSource'])) {
            $model->tamperedSource = $map['TamperedSource'];
        }

        return $model;
    }
}
