<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @description The annotations.
     *
     * @var string[]
     */
    public $annotations;

    /**
     * @description The tags.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description The resource name.
     *
     * @example arms-prometheus-ack-arms-prometheus-c577b6cc8-mvdwd
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'annotations' => 'Annotations',
        'labels' => 'Labels',
        'name' => 'Name',
        'namespace' => 'Namespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
