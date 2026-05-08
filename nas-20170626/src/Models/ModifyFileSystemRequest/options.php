<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $enableABE;

    /**
     * @var bool
     */
    public $enableOplock;

    /**
     * @var bool
     */
    public $vscAccessPointAccessOnly;
    protected $_name = [
        'enableABE' => 'EnableABE',
        'enableOplock' => 'EnableOplock',
        'vscAccessPointAccessOnly' => 'VscAccessPointAccessOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableABE) {
            $res['EnableABE'] = $this->enableABE;
        }

        if (null !== $this->enableOplock) {
            $res['EnableOplock'] = $this->enableOplock;
        }

        if (null !== $this->vscAccessPointAccessOnly) {
            $res['VscAccessPointAccessOnly'] = $this->vscAccessPointAccessOnly;
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
        if (isset($map['EnableABE'])) {
            $model->enableABE = $map['EnableABE'];
        }

        if (isset($map['EnableOplock'])) {
            $model->enableOplock = $map['EnableOplock'];
        }

        if (isset($map['VscAccessPointAccessOnly'])) {
            $model->vscAccessPointAccessOnly = $map['VscAccessPointAccessOnly'];
        }

        return $model;
    }
}
