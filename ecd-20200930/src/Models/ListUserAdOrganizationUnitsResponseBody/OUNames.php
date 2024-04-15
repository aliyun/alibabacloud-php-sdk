<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponseBody;

use AlibabaCloud\Tea\Model;

class OUNames extends Model
{
    /**
     * @description The name of the OU.
     *
     * @example wuying_computers
     *
     * @var string
     */
    public $displayOUName;

    /**
     * @description The canonical name (CNAME) of the OU in the AD domain controller.
     *
     * @example example.com/wuying_computers
     *
     * @var string
     */
    public $OUName;

    /**
     * @description The enterprise AD office network ID.
     *
     * @example cn-hangzhou+dir-485361****
     *
     * @var string
     */
    public $officeSiteId;
    protected $_name = [
        'displayOUName' => 'DisplayOUName',
        'OUName'        => 'OUName',
        'officeSiteId'  => 'OfficeSiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayOUName) {
            $res['DisplayOUName'] = $this->displayOUName;
        }
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
        if (isset($map['DisplayOUName'])) {
            $model->displayOUName = $map['DisplayOUName'];
        }
        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        return $model;
    }
}
