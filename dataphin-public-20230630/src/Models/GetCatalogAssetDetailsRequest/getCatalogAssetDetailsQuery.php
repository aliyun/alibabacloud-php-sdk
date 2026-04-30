<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsRequest;

use AlibabaCloud\Dara\Model;

class getCatalogAssetDetailsQuery extends Model
{
    /**
     * @var string
     */
    public $guid;

    /**
     * @var bool
     */
    public $includeColumns;

    /**
     * @var bool
     */
    public $includeDetailedAttributes;
    protected $_name = [
        'guid' => 'Guid',
        'includeColumns' => 'IncludeColumns',
        'includeDetailedAttributes' => 'IncludeDetailedAttributes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->includeColumns) {
            $res['IncludeColumns'] = $this->includeColumns;
        }

        if (null !== $this->includeDetailedAttributes) {
            $res['IncludeDetailedAttributes'] = $this->includeDetailedAttributes;
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
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['IncludeColumns'])) {
            $model->includeColumns = $map['IncludeColumns'];
        }

        if (isset($map['IncludeDetailedAttributes'])) {
            $model->includeDetailedAttributes = $map['IncludeDetailedAttributes'];
        }

        return $model;
    }
}
