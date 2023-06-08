<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteRealTimeLogLogstoreRequest extends Model
{
    /**
     * @description The name of the Logstore to which log entries are delivered.
     *
     * @example LogstoreName
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery.
     *
     * @example ProjectName
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project is deployed. For more information, see [Regions that support real-time log delivery](~~144883~~).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'logstore' => 'Logstore',
        'project'  => 'Project',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
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
     * @return DeleteRealTimeLogLogstoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
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
