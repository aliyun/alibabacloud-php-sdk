<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @example 3.0
     *
     * @var string
     */
    public $dataApiVersion;

    /**
     * @description flow ID。
     *
     * @example flow_id_arms
     *
     * @var string
     */
    public $flowId;

    /**
     * @example dnjn
     *
     * @var string
     */
    public $flowName;

    /**
     * @example 2.1
     *
     * @var string
     */
    public $JSONVersion;

    /**
     * @example https://pre-url
     *
     * @var string
     */
    public $previewUrl;

    /**
     * @example 1700617436633
     *
     * @var int
     */
    public $previewUrlExpires;

    /**
     * @example DRAFT
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'categories'        => 'Categories',
        'dataApiVersion'    => 'DataApiVersion',
        'flowId'            => 'FlowId',
        'flowName'          => 'FlowName',
        'JSONVersion'       => 'JSONVersion',
        'previewUrl'        => 'PreviewUrl',
        'previewUrlExpires' => 'PreviewUrlExpires',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
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
