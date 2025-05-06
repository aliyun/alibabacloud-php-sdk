<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest;

use AlibabaCloud\Dara\Model;

class assistant extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'id' => 'id',
        'metaData' => 'metaData',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
