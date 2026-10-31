<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;

class databricksPythonConnectInfo extends Model
{
    /**
     * @var string
     */
    public $devHttpPath;

    /**
     * @var bool
     */
    public $enableDatabricksPythonConnect;

    /**
     * @var string
     */
    public $prodHttpPath;
    protected $_name = [
        'devHttpPath' => 'DevHttpPath',
        'enableDatabricksPythonConnect' => 'EnableDatabricksPythonConnect',
        'prodHttpPath' => 'ProdHttpPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devHttpPath) {
            $res['DevHttpPath'] = $this->devHttpPath;
        }

        if (null !== $this->enableDatabricksPythonConnect) {
            $res['EnableDatabricksPythonConnect'] = $this->enableDatabricksPythonConnect;
        }

        if (null !== $this->prodHttpPath) {
            $res['ProdHttpPath'] = $this->prodHttpPath;
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
        if (isset($map['DevHttpPath'])) {
            $model->devHttpPath = $map['DevHttpPath'];
        }

        if (isset($map['EnableDatabricksPythonConnect'])) {
            $model->enableDatabricksPythonConnect = $map['EnableDatabricksPythonConnect'];
        }

        if (isset($map['ProdHttpPath'])) {
            $model->prodHttpPath = $map['ProdHttpPath'];
        }

        return $model;
    }
}
