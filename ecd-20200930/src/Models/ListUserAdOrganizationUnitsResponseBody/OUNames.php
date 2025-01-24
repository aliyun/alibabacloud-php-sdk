<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponseBody;

use AlibabaCloud\Dara\Model;

class OUNames extends Model
{
    /**
     * @var string
     */
    public $displayOUName;
    /**
     * @var string
     */
    public $OUName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
