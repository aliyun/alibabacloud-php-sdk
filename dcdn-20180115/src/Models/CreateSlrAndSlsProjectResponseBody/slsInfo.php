<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectResponseBody;

use AlibabaCloud\Tea\Model;

class slsInfo extends Model
{
    /**
     * @example cn-shanghai.log.*.com
     *
     * @var string
     */
    public $endPoint;

    /**
     * @example dcdn-edge-trlog
     *
     * @var string
     */
    public $logStore;

    /**
     * @example dcdn-edge-rtlog-cn-cfc7****
     *
     * @var string
     */
    public $project;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'endPoint' => 'EndPoint',
        'logStore' => 'LogStore',
        'project'  => 'Project',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
