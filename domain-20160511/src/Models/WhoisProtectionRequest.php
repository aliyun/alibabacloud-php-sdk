<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class WhoisProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $dataContent;

    /**
     * @var int
     */
    public $dataSource;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var bool
     */
    public $whoisProtect;
    protected $_name = [
        'dataContent' => 'DataContent',
        'dataSource' => 'DataSource',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'whoisProtect' => 'WhoisProtect',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataContent) {
            $res['DataContent'] = $this->dataContent;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        if (null !== $this->whoisProtect) {
            $res['WhoisProtect'] = $this->whoisProtect;
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
        if (isset($map['DataContent'])) {
            $model->dataContent = $map['DataContent'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        if (isset($map['WhoisProtect'])) {
            $model->whoisProtect = $map['WhoisProtect'];
        }

        return $model;
    }
}
