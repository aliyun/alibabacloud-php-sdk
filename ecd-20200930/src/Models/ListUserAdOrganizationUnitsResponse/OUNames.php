<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponse;

use AlibabaCloud\Tea\Model;

class OUNames extends Model
{
    /**
     * @var string
     */
    public $OUName;

    /**
     * @var string
     */
    public $officeSiteId;
    protected $_name = [
        'OUName'       => 'OUName',
        'officeSiteId' => 'OfficeSiteId',
    ];

    public function validate()
    {
        Model::validateRequired('OUName', $this->OUName, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OUName) {
            $res['OUName'] = $this->OUName;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OUNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        return $model;
    }
}
