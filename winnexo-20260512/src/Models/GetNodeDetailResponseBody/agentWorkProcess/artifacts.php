<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess;

use AlibabaCloud\Dara\Model;

class artifacts extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $artifactKey;

    /**
     * @var string[]
     */
    public $ref;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'artifactId' => 'artifactId',
        'artifactKey' => 'artifactKey',
        'ref' => 'ref',
        'summary' => 'summary',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->ref)) {
            Model::validateArray($this->ref);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['artifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactKey) {
            $res['artifactKey'] = $this->artifactKey;
        }

        if (null !== $this->ref) {
            if (\is_array($this->ref)) {
                $res['ref'] = [];
                foreach ($this->ref as $key1 => $value1) {
                    $res['ref'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['artifactId'])) {
            $model->artifactId = $map['artifactId'];
        }

        if (isset($map['artifactKey'])) {
            $model->artifactKey = $map['artifactKey'];
        }

        if (isset($map['ref'])) {
            if (!empty($map['ref'])) {
                $model->ref = [];
                foreach ($map['ref'] as $key1 => $value1) {
                    $model->ref[$key1] = $value1;
                }
            }
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
