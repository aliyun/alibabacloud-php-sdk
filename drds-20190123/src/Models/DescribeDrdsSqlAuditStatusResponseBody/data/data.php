<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $extraSlsLogStore;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $detailed;

    /**
     * @var bool
     */
    public $extraWriteEnabled;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var int
     */
    public $extraAliUid;

    /**
     * @var string
     */
    public $extraSlsProject;
    protected $_name = [
        'extraSlsLogStore'  => 'ExtraSlsLogStore',
        'dbName'            => 'DbName',
        'detailed'          => 'Detailed',
        'extraWriteEnabled' => 'ExtraWriteEnabled',
        'enabled'           => 'Enabled',
        'extraAliUid'       => 'ExtraAliUid',
        'extraSlsProject'   => 'ExtraSlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraSlsLogStore) {
            $res['ExtraSlsLogStore'] = $this->extraSlsLogStore;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->detailed) {
            $res['Detailed'] = $this->detailed;
        }
        if (null !== $this->extraWriteEnabled) {
            $res['ExtraWriteEnabled'] = $this->extraWriteEnabled;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->extraAliUid) {
            $res['ExtraAliUid'] = $this->extraAliUid;
        }
        if (null !== $this->extraSlsProject) {
            $res['ExtraSlsProject'] = $this->extraSlsProject;
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
        if (isset($map['ExtraSlsLogStore'])) {
            $model->extraSlsLogStore = $map['ExtraSlsLogStore'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Detailed'])) {
            $model->detailed = $map['Detailed'];
        }
        if (isset($map['ExtraWriteEnabled'])) {
            $model->extraWriteEnabled = $map['ExtraWriteEnabled'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExtraAliUid'])) {
            $model->extraAliUid = $map['ExtraAliUid'];
        }
        if (isset($map['ExtraSlsProject'])) {
            $model->extraSlsProject = $map['ExtraSlsProject'];
        }

        return $model;
    }
}
