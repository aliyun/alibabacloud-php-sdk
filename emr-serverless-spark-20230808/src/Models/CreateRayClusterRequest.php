<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterRequest\headSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterRequest\workerSpec;

class CreateRayClusterRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $extraParam;

    /**
     * @var headSpec
     */
    public $headSpec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkServiceName;

    /**
     * @var workerSpec[]
     */
    public $workerSpec;
    protected $_name = [
        'description' => 'description',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'extraParam' => 'extraParam',
        'headSpec' => 'headSpec',
        'name' => 'name',
        'networkServiceName' => 'networkServiceName',
        'workerSpec' => 'workerSpec',
    ];

    public function validate()
    {
        if (null !== $this->headSpec) {
            $this->headSpec->validate();
        }
        if (\is_array($this->workerSpec)) {
            Model::validateArray($this->workerSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->extraParam) {
            $res['extraParam'] = $this->extraParam;
        }

        if (null !== $this->headSpec) {
            $res['headSpec'] = null !== $this->headSpec ? $this->headSpec->toArray($noStream) : $this->headSpec;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkServiceName) {
            $res['networkServiceName'] = $this->networkServiceName;
        }

        if (null !== $this->workerSpec) {
            if (\is_array($this->workerSpec)) {
                $res['workerSpec'] = [];
                $n1 = 0;
                foreach ($this->workerSpec as $item1) {
                    $res['workerSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['extraParam'])) {
            $model->extraParam = $map['extraParam'];
        }

        if (isset($map['headSpec'])) {
            $model->headSpec = headSpec::fromMap($map['headSpec']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkServiceName'])) {
            $model->networkServiceName = $map['networkServiceName'];
        }

        if (isset($map['workerSpec'])) {
            if (!empty($map['workerSpec'])) {
                $model->workerSpec = [];
                $n1 = 0;
                foreach ($map['workerSpec'] as $item1) {
                    $model->workerSpec[$n1] = workerSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
