<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\imageControl\logoVisibleControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\imageControl\metadataControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\imageControl\textVisibleControl;

class imageControl extends Model
{
    /**
     * @var logoVisibleControl
     */
    public $logoVisibleControl;

    /**
     * @var metadataControl
     */
    public $metadataControl;

    /**
     * @var textVisibleControl
     */
    public $textVisibleControl;
    protected $_name = [
        'logoVisibleControl' => 'LogoVisibleControl',
        'metadataControl' => 'MetadataControl',
        'textVisibleControl' => 'TextVisibleControl',
    ];

    public function validate()
    {
        if (null !== $this->logoVisibleControl) {
            $this->logoVisibleControl->validate();
        }
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
        if (null !== $this->logoVisibleControl) {
            $res['LogoVisibleControl'] = null !== $this->logoVisibleControl ? $this->logoVisibleControl->toArray($noStream) : $this->logoVisibleControl;
        }

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
        if (isset($map['LogoVisibleControl'])) {
            $model->logoVisibleControl = logoVisibleControl::fromMap($map['LogoVisibleControl']);
        }

        if (isset($map['MetadataControl'])) {
            $model->metadataControl = metadataControl::fromMap($map['MetadataControl']);
        }

        if (isset($map['TextVisibleControl'])) {
            $model->textVisibleControl = textVisibleControl::fromMap($map['TextVisibleControl']);
        }

        return $model;
    }
}
