<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\audioControl\metadataControl;

class audioControl extends Model
{
    /**
     * @var metadataControl
     */
    public $metadataControl;
    protected $_name = [
        'metadataControl' => 'MetadataControl',
    ];

    public function validate()
    {
        if (null !== $this->metadataControl) {
            $this->metadataControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadataControl) {
            $res['MetadataControl'] = null !== $this->metadataControl ? $this->metadataControl->toArray($noStream) : $this->metadataControl;
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
        if (isset($map['MetadataControl'])) {
            $model->metadataControl = metadataControl::fromMap($map['MetadataControl']);
        }

        return $model;
    }
}
