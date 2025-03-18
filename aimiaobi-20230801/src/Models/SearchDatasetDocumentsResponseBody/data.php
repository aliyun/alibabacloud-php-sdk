<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponseBody\data\documents;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var documents[]
     */
    public $documents;
    protected $_name = [
        'documents' => 'Documents',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->documents) {
            $res['Documents'] = [];
            if (null !== $this->documents && \is_array($this->documents)) {
                $n = 0;
                foreach ($this->documents as $item) {
                    $res['Documents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n = 0;
                foreach ($map['Documents'] as $item) {
                    $model->documents[$n++] = null !== $item ? documents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
