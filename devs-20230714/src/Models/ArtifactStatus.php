<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ArtifactStatus extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'arn' => 'arn',
        'checksum' => 'checksum',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }

        if (null !== $this->checksum) {
            $res['checksum'] = $this->checksum;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }

        if (isset($map['checksum'])) {
            $model->checksum = $map['checksum'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
