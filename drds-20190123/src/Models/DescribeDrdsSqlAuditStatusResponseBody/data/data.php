<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates whether the complete report of the SQL audit is supported. Valid values: true and false.
     *
     * @example true
     *
     * @var string
     */
    public $detailed;

    /**
     * @description Indicates whether the SQL audit feature is enabled for the database. Valid values: true and false.
     *
     * @example true
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The UID of the external delivery.
     *
     * > This parameter is returned only if external log delivery is enabled.
     * @example 111
     *
     * @var int
     */
    public $extraAliUid;

    /**
     * @description The Log Service Logstore from which logs are delivered.
     *
     * > This parameter is returned only if external log delivery is enabled.
     * @example test
     *
     * @var string
     */
    public $extraSlsLogStore;

    /**
     * @description The Log Service project from which logs are delivered.
     *
     * > This parameter is returned only if external log delivery is enabled.
     * @example test
     *
     * @var string
     */
    public $extraSlsProject;

    /**
     * @description Indicates whether external log delivery is enabled. Valid values: true and false.
     *
     * @example false
     *
     * @var bool
     */
    public $extraWriteEnabled;
    protected $_name = [
        'dbName'            => 'DbName',
        'detailed'          => 'Detailed',
        'enabled'           => 'Enabled',
        'extraAliUid'       => 'ExtraAliUid',
        'extraSlsLogStore'  => 'ExtraSlsLogStore',
        'extraSlsProject'   => 'ExtraSlsProject',
        'extraWriteEnabled' => 'ExtraWriteEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->detailed) {
            $res['Detailed'] = $this->detailed;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->extraAliUid) {
            $res['ExtraAliUid'] = $this->extraAliUid;
        }
        if (null !== $this->extraSlsLogStore) {
            $res['ExtraSlsLogStore'] = $this->extraSlsLogStore;
        }
        if (null !== $this->extraSlsProject) {
            $res['ExtraSlsProject'] = $this->extraSlsProject;
        }
        if (null !== $this->extraWriteEnabled) {
            $res['ExtraWriteEnabled'] = $this->extraWriteEnabled;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Detailed'])) {
            $model->detailed = $map['Detailed'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExtraAliUid'])) {
            $model->extraAliUid = $map['ExtraAliUid'];
        }
        if (isset($map['ExtraSlsLogStore'])) {
            $model->extraSlsLogStore = $map['ExtraSlsLogStore'];
        }
        if (isset($map['ExtraSlsProject'])) {
            $model->extraSlsProject = $map['ExtraSlsProject'];
        }
        if (isset($map['ExtraWriteEnabled'])) {
            $model->extraWriteEnabled = $map['ExtraWriteEnabled'];
        }

        return $model;
    }
}
