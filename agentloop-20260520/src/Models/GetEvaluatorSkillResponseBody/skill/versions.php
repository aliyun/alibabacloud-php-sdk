<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponseBody\skill;

use AlibabaCloud\Dara\Model;

class versions extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'createdAt' => 'createdAt',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        return $model;
    }
}
