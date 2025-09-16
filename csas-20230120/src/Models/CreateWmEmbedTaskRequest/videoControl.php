<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl\metadataControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl\textVisibleControl;

class videoControl extends Model
{
    /**
     * @var metadataControl
     */
    public $metadataControl;

    /**
     * @var textVisibleControl
     */
    public $textVisibleControl;
    protected $_name = [
        'metadataControl' => 'MetadataControl',
        'textVisibleControl' => 'TextVisibleControl',
    ];

    public function validate()
    {
        if (null !== $this->metadataControl) {
            $this->metadataControl->validate();
        }
        if (null !== $this->textVisibleControl) {
            $this->textVisibleControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadataControl) {
            $res['MetadataControl'] = null !== $this->metadataControl ? $this->metadataControl->toArray($noStream) : $this->metadataControl;
        }

        if (null !== $this->textVisibleControl) {
            $res['TextVisibleControl'] = null !== $this->textVisibleControl ? $this->textVisibleControl->toArray($noStream) : $this->textVisibleControl;
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

        if (isset($map['TextVisibleControl'])) {
            $model->textVisibleControl = textVisibleControl::fromMap($map['TextVisibleControl']);
        }

        return $model;
    }
}
