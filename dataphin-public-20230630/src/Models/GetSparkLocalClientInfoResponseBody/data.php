<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSparkLocalClientInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clientFileResourceId;

    /**
     * @var string
     */
    public $clientFileResourceName;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var bool
     */
    public $editable;
    protected $_name = [
        'clientFileResourceId' => 'ClientFileResourceId',
        'clientFileResourceName' => 'ClientFileResourceName',
        'clientName' => 'ClientName',
        'editable' => 'Editable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientFileResourceId) {
            $res['ClientFileResourceId'] = $this->clientFileResourceId;
        }

        if (null !== $this->clientFileResourceName) {
            $res['ClientFileResourceName'] = $this->clientFileResourceName;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->editable) {
            $res['Editable'] = $this->editable;
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
        if (isset($map['ClientFileResourceId'])) {
            $model->clientFileResourceId = $map['ClientFileResourceId'];
        }

        if (isset($map['ClientFileResourceName'])) {
            $model->clientFileResourceName = $map['ClientFileResourceName'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['Editable'])) {
            $model->editable = $map['Editable'];
        }

        return $model;
    }
}
