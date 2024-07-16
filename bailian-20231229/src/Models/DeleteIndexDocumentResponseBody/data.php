<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $deletedDocument;
    protected $_name = [
        'deletedDocument' => 'DeletedDocument',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedDocument) {
            $res['DeletedDocument'] = $this->deletedDocument;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletedDocument'])) {
            if (!empty($map['DeletedDocument'])) {
                $model->deletedDocument = $map['DeletedDocument'];
            }
        }

        return $model;
    }
}
