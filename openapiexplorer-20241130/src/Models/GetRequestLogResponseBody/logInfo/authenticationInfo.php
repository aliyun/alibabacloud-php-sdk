<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo;

use AlibabaCloud\Dara\Model;

class authenticationInfo extends Model
{
    /**
     * @var string
     */
    public $authenticationType;
    /**
     * @var string
     */
    public $signatureMethod;
    /**
     * @var string
     */
    public $signatureVersion;
    protected $_name = [
        'authenticationType' => 'authenticationType',
        'signatureMethod'    => 'signatureMethod',
        'signatureVersion'   => 'signatureVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['authenticationType'] = $this->authenticationType;
        }

        if (null !== $this->signatureMethod) {
            $res['signatureMethod'] = $this->signatureMethod;
        }

        if (null !== $this->signatureVersion) {
            $res['signatureVersion'] = $this->signatureVersion;
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
        if (isset($map['authenticationType'])) {
            $model->authenticationType = $map['authenticationType'];
        }

        if (isset($map['signatureMethod'])) {
            $model->signatureMethod = $map['signatureMethod'];
        }

        if (isset($map['signatureVersion'])) {
            $model->signatureVersion = $map['signatureVersion'];
        }

        return $model;
    }
}
