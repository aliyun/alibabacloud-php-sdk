<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $serviceDescription;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'gmtCreate'          => 'GmtCreate',
        'id'                 => 'Id',
        'serviceDescription' => 'ServiceDescription',
        'serviceName'        => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
