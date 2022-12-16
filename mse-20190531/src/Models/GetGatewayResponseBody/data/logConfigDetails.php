<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Tea\Model;

class logConfigDetails extends Model
{
    /**
     * @description Indicates whether log shipping is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $logEnabled;

    /**
     * @description The name of the Logstore.
     *
     * @example mse_access_log
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The name of the project.
     *
     * @example k8s-log-c173117256e934a96b7fefdf2ef8a8057
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'logEnabled'   => 'LogEnabled',
        'logStoreName' => 'LogStoreName',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEnabled) {
            $res['LogEnabled'] = $this->logEnabled;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfigDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogEnabled'])) {
            $model->logEnabled = $map['LogEnabled'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
