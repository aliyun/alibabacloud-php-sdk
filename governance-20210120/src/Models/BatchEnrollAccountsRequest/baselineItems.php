<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsRequest;

use AlibabaCloud\Dara\Model;

class baselineItems extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $skip;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'config' => 'Config',
        'name' => 'Name',
        'skip' => 'Skip',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
