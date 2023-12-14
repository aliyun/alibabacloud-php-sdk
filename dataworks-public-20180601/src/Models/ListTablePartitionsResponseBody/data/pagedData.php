<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListTablePartitionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class pagedData extends Model
{
    /**
     * @example 1568032253000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1568032253000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example hdfs://emr-header-1.cluster-136574:9000/user/hive/warehouse/pt_table_090901_emr_child/ds=20190909/hr=20/region=shanghai
     *
     * @var string
     */
    public $location;

    /**
     * @example test
     *
     * @var string
     */
    public $partitionComment;

    /**
     * @example ds=20190909/hr=20/region=shanghai
     *
     * @var string
     */
    public $partitionName;

    /**
     * @example hdfs://emr-header-1.cluster-136574:9000/user/hive/warehouse/pt_table_090901_emr_child/ds=20190909/hr=20/region=shanghai
     *
     * @var string
     */
    public $partitionPath;

    /**
     * @example HIVE
     *
     * @var string
     */
    public $partitionType;
    protected $_name = [
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'location'         => 'Location',
        'partitionComment' => 'PartitionComment',
        'partitionName'    => 'PartitionName',
        'partitionPath'    => 'PartitionPath',
        'partitionType'    => 'PartitionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->partitionComment) {
            $res['PartitionComment'] = $this->partitionComment;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->partitionPath) {
            $res['PartitionPath'] = $this->partitionPath;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagedData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['PartitionComment'])) {
            $model->partitionComment = $map['PartitionComment'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['PartitionPath'])) {
            $model->partitionPath = $map['PartitionPath'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        return $model;
    }
}
