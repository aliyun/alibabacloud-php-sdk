<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The version of the container, such as Ali-Tomcat, in which a High-speed Service Framework (HSF) application runs.
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description The ID of the group.
     *
     * @example b2a8a925-477a-eswa-b823-d5e22500****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example _DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the group.
     *
     * @example 0
     *
     * @var int
     */
    public $groupType;

    /**
     * @description The address of the image. This parameter is required when the **PackageType** parameter is set to **Image**.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/demo/nginx:latest
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The version of the Java development kit (JDK) on which the deployment package of the application depends. This parameter is invalid when the **PackageType** parameter is set to **Image**.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $jdk;

    /**
     * @description The type of the application deployment package. Valid values:
     *
     *   When you use a Java package, set this value to **FatJar**, **War**, or **Image**.
     *
     *   When you use a PHP package, the following values are valid:
     *
     *   **PhpZip**
     *   **IMAGE_PHP_5_4**
     *   **IMAGE_PHP_5_4_ALPINE**
     *   **IMAGE_PHP_5_5**
     *   **IMAGE_PHP_5_5_ALPINE**
     *   **IMAGE_PHP_5_6**
     *   **IMAGE_PHP_5_6_ALPINE**
     *   **IMAGE_PHP_7_0**
     *   **IMAGE_PHP_7_0_ALPINE**
     *   **IMAGE_PHP_7_1**
     *   **IMAGE_PHP_7_1_ALPINE**
     *   **IMAGE_PHP_7_2**
     *   **IMAGE_PHP_7_2_ALPINE**
     *   **IMAGE_PHP_7_3**
     *   **IMAGE_PHP_7_3_ALPINE**
     *
     * @example Image
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The address of the deployment package. This parameter is required when the **PackageType** parameter is set to **FatJar**, **War**, or **PhpZip**.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/demo/nginx:latest
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required when the **PackageType** parameter is set to **FatJar**, **War**, or **PhpZip**. The parameter value will be automatically generated when you use an image to deploy the application and specify the **ImageUrl** parameter.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The total number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The number of running instances.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description The version of the Apache Tomcat container on which the deployment package of the application depends. This parameter is invalid when the **PackageType** parameter is set to **Image**.
     *
     * @example Apache Tomcat 7
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'edasContainerVersion' => 'EdasContainerVersion',
        'groupId'              => 'GroupId',
        'groupName'            => 'GroupName',
        'groupType'            => 'GroupType',
        'imageUrl'             => 'ImageUrl',
        'jdk'                  => 'Jdk',
        'packageType'          => 'PackageType',
        'packageUrl'           => 'PackageUrl',
        'packageVersion'       => 'PackageVersion',
        'replicas'             => 'Replicas',
        'runningInstances'     => 'RunningInstances',
        'webContainer'         => 'WebContainer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
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
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
