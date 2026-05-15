<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\AgentResource;

use AlibabaCloud\Dara\Model;

class latestVersion extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'publisher' => 'publisher',
        'version' => 'version',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->publisher) {
            $res['publisher'] = $this->publisher;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['publisher'])) {
            $model->publisher = $map['publisher'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
