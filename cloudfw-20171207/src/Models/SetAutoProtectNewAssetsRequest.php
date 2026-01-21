<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class SetAutoProtectNewAssetsRequest extends Model
{
    /**
     * @var bool
     */
    public $autoProtect;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'autoProtect' => 'AutoProtect',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProtect) {
            $res['AutoProtect'] = $this->autoProtect;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['AutoProtect'])) {
            $model->autoProtect = $map['AutoProtect'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
