<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineBuildRequest extends Model
{
    /**
     * @var string
     */
    public $artifactUrl;

    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $routineName;
    protected $_name = [
        'artifactUrl' => 'ArtifactUrl',
        'branch' => 'Branch',
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactUrl) {
            $res['ArtifactUrl'] = $this->artifactUrl;
        }

        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }

        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
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
        if (isset($map['ArtifactUrl'])) {
            $model->artifactUrl = $map['ArtifactUrl'];
        }

        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }

        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        return $model;
    }
}
