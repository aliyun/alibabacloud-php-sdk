<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody\profiles;

class ListModelDeploymentProfilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var profiles[]
     */
    public $profiles;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'modelId' => 'ModelId',
        'modelVersion' => 'ModelVersion',
        'profiles' => 'Profiles',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->profiles)) {
            Model::validateArray($this->profiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        if (null !== $this->profiles) {
            if (\is_array($this->profiles)) {
                $res['Profiles'] = [];
                $n1 = 0;
                foreach ($this->profiles as $item1) {
                    $res['Profiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        if (isset($map['Profiles'])) {
            if (!empty($map['Profiles'])) {
                $model->profiles = [];
                $n1 = 0;
                foreach ($map['Profiles'] as $item1) {
                    $model->profiles[$n1] = profiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
