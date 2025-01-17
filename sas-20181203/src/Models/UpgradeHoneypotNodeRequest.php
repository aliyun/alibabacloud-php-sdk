<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpgradeHoneypotNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $allowHoneypotAccessInternet;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'allowHoneypotAccessInternet' => 'AllowHoneypotAccessInternet',
        'lang'                        => 'Lang',
        'nodeId'                      => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowHoneypotAccessInternet) {
            $res['AllowHoneypotAccessInternet'] = $this->allowHoneypotAccessInternet;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['AllowHoneypotAccessInternet'])) {
            $model->allowHoneypotAccessInternet = $map['AllowHoneypotAccessInternet'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
