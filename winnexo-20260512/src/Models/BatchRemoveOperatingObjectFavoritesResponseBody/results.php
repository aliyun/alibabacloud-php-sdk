<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\BatchRemoveOperatingObjectFavoritesResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var bool
     */
    public $isFavorited;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var bool
     */
    public $processed;
    protected $_name = [
        'isFavorited' => 'isFavorited',
        'objectId' => 'objectId',
        'processed' => 'processed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFavorited) {
            $res['isFavorited'] = $this->isFavorited;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->processed) {
            $res['processed'] = $this->processed;
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
        if (isset($map['isFavorited'])) {
            $model->isFavorited = $map['isFavorited'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['processed'])) {
            $model->processed = $map['processed'];
        }

        return $model;
    }
}
