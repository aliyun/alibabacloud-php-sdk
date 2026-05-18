<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpdateDocumentRequest extends Model
{
    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var string
     */
    public $newDescription;
    protected $_name = [
        'documentName' => 'DocumentName',
        'kbUuid' => 'KbUuid',
        'newDescription' => 'NewDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
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
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        return $model;
    }
}
