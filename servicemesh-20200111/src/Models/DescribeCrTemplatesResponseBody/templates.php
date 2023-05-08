<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The Chinese name of the YAML template.
     *
     * @var string
     */
    public $chineseName;

    /**
     * @description The English name of the YAML template.
     *
     * @example HTTP basic routing
     *
     * @var string
     */
    public $englishName;

    /**
     * @description The content in the YAML template.
     *
     * @example apiVersion: networking.istio.io/v1beta1\nkind: VirtualService\nmetadata:\n  name: reviews-route # Name for this VirtualService.\nspec:\n  hosts:\n  - reviews.prod.svc.cluster.local # Service that this VirtualSerivce belongs to. \n  http:\n  - name: \"reviews-route\" # Name for the route.\n    route:\n    - destination: # Uniquely identifies the instances of a service to which all traffic should be forwarded to.\n        host: reviews.prod.svc.cluster.local # The name of a service from the service registry or ServiceEntry.\n        port:\n          number: 8080"
     *
     * @var string
     */
    public $yaml;
    protected $_name = [
        'chineseName' => 'ChineseName',
        'englishName' => 'EnglishName',
        'yaml'        => 'Yaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chineseName) {
            $res['ChineseName'] = $this->chineseName;
        }
        if (null !== $this->englishName) {
            $res['EnglishName'] = $this->englishName;
        }
        if (null !== $this->yaml) {
            $res['Yaml'] = $this->yaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChineseName'])) {
            $model->chineseName = $map['ChineseName'];
        }
        if (isset($map['EnglishName'])) {
            $model->englishName = $map['EnglishName'];
        }
        if (isset($map['Yaml'])) {
            $model->yaml = $map['Yaml'];
        }

        return $model;
    }
}
