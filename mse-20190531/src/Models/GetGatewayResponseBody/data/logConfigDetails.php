<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;

class logConfigDetails extends Model
{
    /**
     * @var bool
     */
    public $logEnabled;
    /**
     * @var string
     */
    public $logStoreName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
