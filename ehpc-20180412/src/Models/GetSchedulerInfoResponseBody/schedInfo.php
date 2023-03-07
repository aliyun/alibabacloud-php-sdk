<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoResponseBody;

use AlibabaCloud\Tea\Model;

class schedInfo extends Model
{
    /**
     * @description The detailed settings of the scheduler.
     *
     * @example { 				"AclInfo": [ 					{ 						"AclEnable": false, 						"UntrackUser": [], 						"User": [], 						"QueueName": "workq" 					} 				], 				"JobHistory": "", 				"SchedIteration": "60", 				"QueueResource": [ 					{ 						"UntrackUser": [], 						"User": [], 						"QueueName": "workq" 					} 				] 			}
     *
     * @var string
     */
    public $configuration;

    /**
     * @description The type of the scheduler.
     *
     * @example pbs
     *
     * @var string
     */
    public $schedName;
    protected $_name = [
        'configuration' => 'Configuration',
        'schedName'     => 'SchedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->schedName) {
            $res['SchedName'] = $this->schedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['SchedName'])) {
            $model->schedName = $map['SchedName'];
        }

        return $model;
    }
}
