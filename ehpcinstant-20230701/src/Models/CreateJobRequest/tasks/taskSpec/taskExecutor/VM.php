<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor;

use AlibabaCloud\Tea\Model;

class VM extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example m-xxxx
     *
     * @var string
     */
    public $image;

    /**
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $prologScript;

    /**
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'appId'        => 'AppId',
        'image'        => 'Image',
        'prologScript' => 'PrologScript',
        'script'       => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->prologScript) {
            $res['PrologScript'] = $this->prologScript;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VM
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['PrologScript'])) {
            $model->prologScript = $map['PrologScript'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
