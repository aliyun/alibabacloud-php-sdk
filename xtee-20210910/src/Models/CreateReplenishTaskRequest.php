<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateReplenishTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $clientFileName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $clientPath;

    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'clientFileName' => 'ClientFileName',
        'clientPath'     => 'ClientPath',
        'lang'           => 'Lang',
        'taskId'         => 'TaskId',
        'regId'          => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientFileName) {
            $res['ClientFileName'] = $this->clientFileName;
        }
        if (null !== $this->clientPath) {
            $res['ClientPath'] = $this->clientPath;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReplenishTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientFileName'])) {
            $model->clientFileName = $map['ClientFileName'];
        }
        if (isset($map['ClientPath'])) {
            $model->clientPath = $map['ClientPath'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
