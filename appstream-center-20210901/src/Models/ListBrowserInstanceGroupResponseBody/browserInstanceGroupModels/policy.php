<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy\clientTypes;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy\clipboardPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy\videoPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy\watermarkPolicy;

class policy extends Model
{
    /**
     * @var string
     */
    public $appContentProtection;

    /**
     * @var authorizeAccessPolicyRules[]
     */
    public $authorizeAccessPolicyRules;

    /**
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @var clipboardPolicy
     */
    public $clipboardPolicy;

    /**
     * @var videoPolicy
     */
    public $videoPolicy;

    /**
     * @var watermarkPolicy
     */
    public $watermarkPolicy;
    protected $_name = [
        'appContentProtection' => 'AppContentProtection',
        'authorizeAccessPolicyRules' => 'AuthorizeAccessPolicyRules',
        'clientTypes' => 'ClientTypes',
        'clipboardPolicy' => 'ClipboardPolicy',
        'videoPolicy' => 'VideoPolicy',
        'watermarkPolicy' => 'WatermarkPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeAccessPolicyRules)) {
            Model::validateArray($this->authorizeAccessPolicyRules);
        }
        if (\is_array($this->clientTypes)) {
            Model::validateArray($this->clientTypes);
        }
        if (null !== $this->clipboardPolicy) {
            $this->clipboardPolicy->validate();
        }
        if (null !== $this->videoPolicy) {
            $this->videoPolicy->validate();
        }
        if (null !== $this->watermarkPolicy) {
            $this->watermarkPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appContentProtection) {
            $res['AppContentProtection'] = $this->appContentProtection;
        }

        if (null !== $this->authorizeAccessPolicyRules) {
            if (\is_array($this->authorizeAccessPolicyRules)) {
                $res['AuthorizeAccessPolicyRules'] = [];
                $n1 = 0;
                foreach ($this->authorizeAccessPolicyRules as $item1) {
                    $res['AuthorizeAccessPolicyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientTypes) {
            if (\is_array($this->clientTypes)) {
                $res['ClientTypes'] = [];
                $n1 = 0;
                foreach ($this->clientTypes as $item1) {
                    $res['ClientTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clipboardPolicy) {
            $res['ClipboardPolicy'] = null !== $this->clipboardPolicy ? $this->clipboardPolicy->toArray($noStream) : $this->clipboardPolicy;
        }

        if (null !== $this->videoPolicy) {
            $res['VideoPolicy'] = null !== $this->videoPolicy ? $this->videoPolicy->toArray($noStream) : $this->videoPolicy;
        }

        if (null !== $this->watermarkPolicy) {
            $res['WatermarkPolicy'] = null !== $this->watermarkPolicy ? $this->watermarkPolicy->toArray($noStream) : $this->watermarkPolicy;
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
        if (isset($map['AppContentProtection'])) {
            $model->appContentProtection = $map['AppContentProtection'];
        }

        if (isset($map['AuthorizeAccessPolicyRules'])) {
            if (!empty($map['AuthorizeAccessPolicyRules'])) {
                $model->authorizeAccessPolicyRules = [];
                $n1 = 0;
                foreach ($map['AuthorizeAccessPolicyRules'] as $item1) {
                    $model->authorizeAccessPolicyRules[$n1] = authorizeAccessPolicyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n1 = 0;
                foreach ($map['ClientTypes'] as $item1) {
                    $model->clientTypes[$n1] = clientTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClipboardPolicy'])) {
            $model->clipboardPolicy = clipboardPolicy::fromMap($map['ClipboardPolicy']);
        }

        if (isset($map['VideoPolicy'])) {
            $model->videoPolicy = videoPolicy::fromMap($map['VideoPolicy']);
        }

        if (isset($map['WatermarkPolicy'])) {
            $model->watermarkPolicy = watermarkPolicy::fromMap($map['WatermarkPolicy']);
        }

        return $model;
    }
}
