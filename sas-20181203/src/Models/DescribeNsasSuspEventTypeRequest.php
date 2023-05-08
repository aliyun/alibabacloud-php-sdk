<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeNsasSuspEventTypeRequest extends Model
{
    /**
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @example ca3108551c83c4d949106e1ab9e1e****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example Unusual Logon
     *
     * @var string
     */
    public $name;

    /**
     * @example testECS
     *
     * @var string
     */
    public $remark;

    /**
     * @example 180.212.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
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
