<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSliderCaptchaPageResponseBody\configs;

class GetSliderCaptchaPageResponseBody extends Model
{
    /**
     * @var configs
     */
    public $configs;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $forceLanguage;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int[]
     */
    public $siteIds;
    protected $_name = [
        'configs' => 'Configs',
        'customContent' => 'CustomContent',
        'forceLanguage' => 'ForceLanguage',
        'id' => 'Id',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'siteIds' => 'SiteIds',
    ];

    public function validate()
    {
        if (null !== $this->configs) {
            $this->configs->validate();
        }
        if (\is_array($this->siteIds)) {
            Model::validateArray($this->siteIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = null !== $this->configs ? $this->configs->toArray($noStream) : $this->configs;
        }

        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }

        if (null !== $this->forceLanguage) {
            $res['ForceLanguage'] = $this->forceLanguage;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteIds) {
            if (\is_array($this->siteIds)) {
                $res['SiteIds'] = [];
                $n1 = 0;
                foreach ($this->siteIds as $item1) {
                    $res['SiteIds'][$n1] = $item1;
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
        if (isset($map['Configs'])) {
            $model->configs = configs::fromMap($map['Configs']);
        }

        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }

        if (isset($map['ForceLanguage'])) {
            $model->forceLanguage = $map['ForceLanguage'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteIds'])) {
            if (!empty($map['SiteIds'])) {
                $model->siteIds = [];
                $n1 = 0;
                foreach ($map['SiteIds'] as $item1) {
                    $model->siteIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
