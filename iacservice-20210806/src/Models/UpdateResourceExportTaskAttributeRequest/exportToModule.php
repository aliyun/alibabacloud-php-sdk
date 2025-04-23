<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;

use AlibabaCloud\Dara\Model;

class exportToModule extends Model
{
    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $statePath;
    protected $_name = [
        'source' => 'source',
        'sourcePath' => 'sourcePath',
        'statePath' => 'statePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        if (null !== $this->statePath) {
            $res['statePath'] = $this->statePath;
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
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        if (isset($map['statePath'])) {
            $model->statePath = $map['statePath'];
        }

        return $model;
    }
}
