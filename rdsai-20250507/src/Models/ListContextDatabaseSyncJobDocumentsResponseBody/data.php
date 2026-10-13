<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobDocumentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobDocumentsResponseBody\data\documents;

class data extends Model
{
    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'documents' => 'Documents',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['Documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    $res['Documents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['Documents'] as $item1) {
                    $model->documents[$n1] = documents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
