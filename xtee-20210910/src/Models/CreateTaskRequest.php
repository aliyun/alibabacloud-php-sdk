<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientFileName;

    /**
     * @var string
     */
    public $clientPath;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'clientFileName' => 'ClientFileName',
        'clientPath'     => 'ClientPath',
        'describe'       => 'Describe',
        'lang'           => 'Lang',
        'sceneName'      => 'SceneName',
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
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskRequest
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
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
