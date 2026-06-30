<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody;

use AlibabaCloud\Dara\Model;

class latestVersion extends Model
{
    /**
     * @var string
     */
    public $changelog;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'changelog' => 'Changelog',
        'createdAt' => 'CreatedAt',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changelog) {
            $res['Changelog'] = $this->changelog;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
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
        if (isset($map['Changelog'])) {
            $model->changelog = $map['Changelog'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
