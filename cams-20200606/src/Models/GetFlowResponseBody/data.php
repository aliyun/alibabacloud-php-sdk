<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $dataApiVersion;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $JSONVersion;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var int
     */
    public $previewUrlExpires;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'categories' => 'Categories',
        'dataApiVersion' => 'DataApiVersion',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'JSONVersion' => 'JSONVersion',
        'previewUrl' => 'PreviewUrl',
        'previewUrlExpires' => 'PreviewUrlExpires',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dataApiVersion) {
            $res['DataApiVersion'] = $this->dataApiVersion;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->JSONVersion) {
            $res['JSONVersion'] = $this->JSONVersion;
        }

        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }

        if (null !== $this->previewUrlExpires) {
            $res['PreviewUrlExpires'] = $this->previewUrlExpires;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DataApiVersion'])) {
            $model->dataApiVersion = $map['DataApiVersion'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['JSONVersion'])) {
            $model->JSONVersion = $map['JSONVersion'];
        }

        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }

        if (isset($map['PreviewUrlExpires'])) {
            $model->previewUrlExpires = $map['PreviewUrlExpires'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
