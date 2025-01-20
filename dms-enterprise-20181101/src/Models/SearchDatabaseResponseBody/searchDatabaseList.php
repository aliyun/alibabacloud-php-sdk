<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase;

class searchDatabaseList extends Model
{
    /**
     * @var searchDatabase[]
     */
    public $searchDatabase;
    protected $_name = [
        'searchDatabase' => 'SearchDatabase',
    ];

    public function validate()
    {
        if (\is_array($this->searchDatabase)) {
            Model::validateArray($this->searchDatabase);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchDatabase) {
            if (\is_array($this->searchDatabase)) {
                $res['SearchDatabase'] = [];
                $n1                    = 0;
                foreach ($this->searchDatabase as $item1) {
                    $res['SearchDatabase'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['SearchDatabase'])) {
            if (!empty($map['SearchDatabase'])) {
                $model->searchDatabase = [];
                $n1                    = 0;
                foreach ($map['SearchDatabase'] as $item1) {
                    $model->searchDatabase[$n1++] = searchDatabase::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
