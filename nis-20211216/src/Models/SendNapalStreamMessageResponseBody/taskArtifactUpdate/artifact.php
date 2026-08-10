<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskArtifactUpdate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskArtifactUpdate\artifact\parts;

class artifact extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var parts[]
     */
    public $parts;
    protected $_name = [
        'artifactId' => 'ArtifactId',
        'description' => 'Description',
        'extensions' => 'Extensions',
        'metadata' => 'Metadata',
        'name' => 'Name',
        'parts' => 'Parts',
    ];

    public function validate()
    {
        if (\is_array($this->extensions)) {
            Model::validateArray($this->extensions);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->parts)) {
            Model::validateArray($this->parts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extensions) {
            if (\is_array($this->extensions)) {
                $res['Extensions'] = [];
                $n1 = 0;
                foreach ($this->extensions as $item1) {
                    $res['Extensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parts) {
            if (\is_array($this->parts)) {
                $res['Parts'] = [];
                $n1 = 0;
                foreach ($this->parts as $item1) {
                    $res['Parts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                $n1 = 0;
                foreach ($map['Extensions'] as $item1) {
                    $model->extensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parts'])) {
            if (!empty($map['Parts'])) {
                $model->parts = [];
                $n1 = 0;
                foreach ($map['Parts'] as $item1) {
                    $model->parts[$n1] = parts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
