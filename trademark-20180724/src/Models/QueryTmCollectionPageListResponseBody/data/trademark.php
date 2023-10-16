<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmCollectionPageListResponseBody\data;

use AlibabaCloud\Tea\Model;

class trademark extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var bool
     */
    public $collected;

    /**
     * @var string
     */
    public $collectionContent;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $tmName;
    protected $_name = [
        'classification'    => 'Classification',
        'collected'         => 'Collected',
        'collectionContent' => 'CollectionContent',
        'id'                => 'Id',
        'itemId'            => 'ItemId',
        'tmName'            => 'TmName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->collected) {
            $res['Collected'] = $this->collected;
        }
        if (null !== $this->collectionContent) {
            $res['CollectionContent'] = $this->collectionContent;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Collected'])) {
            $model->collected = $map['Collected'];
        }
        if (isset($map['CollectionContent'])) {
            $model->collectionContent = $map['CollectionContent'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }

        return $model;
    }
}
