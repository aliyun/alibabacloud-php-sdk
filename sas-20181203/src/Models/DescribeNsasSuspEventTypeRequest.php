<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeNsasSuspEventTypeRequest extends Model
{
    /**
     * @description The name of the container field. Valid values:
     *
     *   **clusterId**: the ID of the cluster
     *
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the container field.
     *
     * @example ca3108551c83c4d949106e1ab9e1e****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The ID of the request source. Set the value to **sas**, which indicates that the request is sent from Security Center.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the alert type.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the server.
     *
     * @example testECS
     *
     * @var string
     */
    public $remark;

    /**
     * @description The source IP address of the request.
     *
     * @example 180.212.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUIDs of servers. Separate multiple UUIDs with commas (,).
     *
     * > You can call the [DescribeCloudCenterInstances](https://help.aliyun.com/document_detail/141932.html) operation to query the UUIDs of servers.
     * @example f56406cb-916d-42db-b6f7-2ff79e34****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'from'                => 'From',
        'lang'                => 'Lang',
        'name'                => 'Name',
        'remark'              => 'Remark',
        'sourceIp'            => 'SourceIp',
        'uuids'               => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNsasSuspEventTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
