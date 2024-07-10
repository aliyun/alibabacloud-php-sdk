<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class MetricsCollectConfig extends Model
{
    /**
     * @var bool
     */
    public $enablePushToUserSLS;

    /**
     * @example my-sls-logstorename
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @example my-sls-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'enablePushToUserSLS' => 'EnablePushToUserSLS',
        'logstoreName'        => 'LogstoreName',
        'projectName'         => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePushToUserSLS) {
            $res['EnablePushToUserSLS'] = $this->enablePushToUserSLS;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetricsCollectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePushToUserSLS'])) {
            $model->enablePushToUserSLS = $map['EnablePushToUserSLS'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
