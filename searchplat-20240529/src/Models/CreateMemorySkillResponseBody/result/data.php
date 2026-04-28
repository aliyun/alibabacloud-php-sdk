<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemorySkillResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string[]
     */
    public $resourcePaths;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $triggers;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'id' => 'id',
        'name' => 'name',
        'owner' => 'owner',
        'resourcePaths' => 'resource_paths',
        'tags' => 'tags',
        'triggers' => 'triggers',
        'updatedAt' => 'updated_at',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePaths)) {
            Model::validateArray($this->resourcePaths);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->resourcePaths) {
            if (\is_array($this->resourcePaths)) {
                $res['resource_paths'] = [];
                $n1 = 0;
                foreach ($this->resourcePaths as $item1) {
                    $res['resource_paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['triggers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['resource_paths'])) {
            if (!empty($map['resource_paths'])) {
                $model->resourcePaths = [];
                $n1 = 0;
                foreach ($map['resource_paths'] as $item1) {
                    $model->resourcePaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['triggers'])) {
            if (!empty($map['triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['triggers'] as $item1) {
                    $model->triggers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
