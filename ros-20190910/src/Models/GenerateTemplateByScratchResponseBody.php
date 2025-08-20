<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponseBody\resourcesToImport;

class GenerateTemplateByScratchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcesToImport[]
     */
    public $resourcesToImport;

    /**
     * @var string
     */
    public $templateBody;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourcesToImport' => 'ResourcesToImport',
        'templateBody' => 'TemplateBody',
    ];

    public function validate()
    {
        if (\is_array($this->resourcesToImport)) {
            Model::validateArray($this->resourcesToImport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourcesToImport) {
            if (\is_array($this->resourcesToImport)) {
                $res['ResourcesToImport'] = [];
                $n1 = 0;
                foreach ($this->resourcesToImport as $item1) {
                    $res['ResourcesToImport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourcesToImport'])) {
            if (!empty($map['ResourcesToImport'])) {
                $model->resourcesToImport = [];
                $n1 = 0;
                foreach ($map['ResourcesToImport'] as $item1) {
                    $model->resourcesToImport[$n1] = resourcesToImport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
